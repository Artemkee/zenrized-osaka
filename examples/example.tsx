import React, { useState } from "react";

type Todo = {
    id: number;
    text: string;
    completed: boolean;
};

type Props = {
    initialTodos?: Todo[];
};

const TodoList: React.FC<Props> = ({ initialTodos = [] }) => {
    const [todos, setTodos] = useState<Todo[]>(initialTodos);
    const [input, setInput] = useState("");

    const addTodo = () => {
        if (input.trim() === "") return;
        setTodos([...todos, { id: Date.now(), text: input, completed: false }]);
        setInput("");
    };

    const toggleTodo = (id: number) => {
        setTodos((todos) =>
            todos.map((todo) =>
                todo.id === id ? { ...todo, completed: !todo.completed } : todo
            )
        );
    };

    return (
        <div>
            <h2>Todo List</h2>
            <input
                value={input}
                onChange={(e) => setInput(e.target.value)}
                placeholder="Add new todo"
            />
            <button onClick={addTodo}>Add</button>
            <ul>
                {todos.map((todo) => (
                    <li
                        key={todo.id}
                        style={{
                            textDecoration: todo.completed
                                ? "line-through"
                                : "none",
                        }}
                        onClick={() => toggleTodo(todo.id)}
                    >
                        {todo.text}
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default TodoList;
