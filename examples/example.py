from datetime import datetime
from typing import Optional

class User:
    def __init__(self, user_id: int, name: str, email: Optional[str] = None):
        self._id = user_id
        self._name = name
        self._email = email

    def get_profile(self) -> str:
        date = datetime.now()
        return (
            f"User: {self._name} (ID: {self._id}) - "
            f"Registered at: {date.strftime('%Y-%m-%d')}"
        )

if __name__ == "__main__":
    user = User(1, "John Doe", "jd@example.com")
    print(user.get_profile())
