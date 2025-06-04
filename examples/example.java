import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

public class User {
    private int id;
    private String name;
    private String email;

    public User(int id, String name, String email) {
        this.id = id;
        this.name = name;
        this.email = email;
    }

    public String getProfile() {
        LocalDate date = LocalDate.now();
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd");
        return String.format(
            "User: %s (ID: %d) - Registered at: %s",
            name, id, date.format(formatter)
        );
    }

    public static void main(String[] args) {
        User user = new User(1, "John Doe", "jd@example.com");
        System.out.println(user.getProfile());
    }
}
