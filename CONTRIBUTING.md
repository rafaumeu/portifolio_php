# Contributing Guide

## Commit Convention

We follow the **Conventional Commits** specification.

### Format
```text
<type>(<scope>): <subject>

- <body>
- <footer>
```

### Types
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Formatting, missing semi colons, etc; no code change
- `refactor`: Refactoring production code
- `test`: Adding missing tests, refactoring tests; no production code change
- `chore`: Updating build tasks, package manager configs, etc; no production code change

### Example
```text
feat(auth): add login validation

- Add email format check
- Add password strength check
- Update login controller to use new validator
```

### Command Line Usage
To achieve the multi-line format easily in the terminal:

```bash
git commit -m "feat(auth): add login validation" -m "- Add email format check" -m "- Add password strength check"
```
