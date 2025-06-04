#include <iostream>
#include <string>
#include <optional>
#include <chrono>
#include <iomanip>
#include <sstream>

class User {
private:
    int id;
    std::string name;
    std::optional<std::string> email;

public:
    User(int userId, const std::string& userName, std::optional<std::string> userEmail = std::nullopt)
        : id(userId), name(userName), email(userEmail) {}

    std::string getProfile() const {
        auto now = std::chrono::system_clock::now();
        std::time_t now_time = std::chrono::system_clock::to_time_t(now);
        std::tm tm = *std::localtime(&now_time);

        std::ostringstream oss;
        oss << "User: " << name << " (ID: " << id << ") - Registered at: "
            << std::put_time(&tm, "%Y-%m-%d");
        return oss.str();
    }
};

int main() {
    User user(1, "John Doe", "jd@example.com");
    std::cout << user.getProfile() << std::endl;
    return 0;
}
