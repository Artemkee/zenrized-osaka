package main

import (
	"fmt"
	"time"
)

type User struct {
	ID    int
	Name  string
	Email *string
}

func NewUser(id int, name string, email *string) *User {
	return &User{
		ID:    id,
		Name:  name,
		Email: email,
	}
}

func (u *User) GetProfile() string {
	date := time.Now().Format("2006-01-02")
	return fmt.Sprintf("User: %s (ID: %d) - Registered at: %s", u.Name, u.ID, date)
}

func main() {
	email := "jd@example.com"
	user := NewUser(1, "John Doe", &email)
	fmt.Println(user.GetProfile())
}
