# Beads Task Management

This directory contains task epics and subtasks for the project.

## Structure

Each `.md` file represents an epic with its associated tasks.

## Task Format

```markdown
### Task Title
- **Status:** pending | in_progress | completed | blocked
- **Priority:** high | medium | low
- **Depends on:** (optional) Other task references
- **Description:** What needs to be done
- **Checklist:**
  - [ ] Subtask 1
  - [ ] Subtask 2
```

## Status Values

| Status | Description |
|--------|-------------|
| `pending` | Not started |
| `in_progress` | Currently being worked on |
| `completed` | Done |
| `blocked` | Waiting on dependency or external factor |

## Current Epics

| Epic | Status | Priority |
|------|--------|----------|
| [deployer-v2-migration](./deployer-v2-migration.md) | pending | high |
