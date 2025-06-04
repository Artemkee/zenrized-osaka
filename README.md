# Zenrized Osaka

[![Preview in vscode.dev](https://img.shields.io/badge/preview%20in-vscode.dev-230f1419.svg?style=flat&color=2aa198)](https://vscode.dev/editor/theme/artemkee.zenrized-osaka)

Visual Studio Code theme inspired by [solarized-osaka.nvim](https://github.com/craftzdog/solarized-osaka.nvim)

## 📸 Screenshots

### Typescript

![Zenrized Osaka in Typescripts](screenshots/example_tsx.png)

### PHP

![Zenrized Osaka in PHP](screenshots/example_php.png)

### Object-like files (JSON, CSS, etc.)

![Zenrized Osaka in Object-like files](screenshots/example_json.png)

## 📦 Installing

This extension is available for free in the [Visual Studio Code Marketplace](https://marketplace.visualstudio.com/items?itemName=Artemkee.zenrized-osaka)

## ⚙️ Suggest Editor Settings

```
"editor.fontSize": 14,
"workbench.tree.indent": 10,
"editor.fontFamily": "JetBrains Mono"
```

JetBrains Mono Download: [https://www.jetbrains.com/lp/mono](https://www.jetbrains.com/lp/mono)

## 🛠️ Theme Customization

If you want to remove _italic_ style from type keywords and control flow keywords, you can easily override this in your VS Code settings.

1. Open `Command Palette` (`CMD+SHIFT+P` for Mac, `CTRL+SHIFT+P` for Windows/Linux, with the default key bindings)
2. Type `Preferences: Open User Settings (JSON)` and select it from the list.
3. Add the following to your `settings.json`:

```json
"editor.tokenColorCustomizations": {
  "[Zenrized Osaka]": {
    "textMateRules": [
      {
        "scope": [
          "storage.type",
          "keyword.control.flow"
        ],
        "settings": {
          "fontStyle": ""
        }
      }
    ]
  }
}
```

## 💡 Contributing & Feedback

Found a bug or have a suggestion?  
Open an [issue](https://github.com/Artemkee/zenrized-osaka/issues) or submit a pull request!

## 📄 License

MIT © Artem Mozhaev (Artemkee)
