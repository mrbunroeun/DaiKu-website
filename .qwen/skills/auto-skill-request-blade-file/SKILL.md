---
name: request-blade-file-procedure
description: Procedure for correctly prompting the user to provide a Blade file's content or path using the ask_user_question tool.
source: auto-skill
extracted_at: '2026-06-25T06:15:00.000Z'
---

## Purpose
This skill documents the correct way to ask the user for a Blade file (or any large text file) when the assistant needs to make modifications. It captures the required schema for the `ask_user_question` tool and provides a reusable prompt template.

## Required tool schema
The `ask_user_question` tool expects the following JSON structure:
```json
{
  "metadata": { ...optional... },
  "questions": [
    {
      "header": "<short-header>",   // non‑empty string, max 12 characters
      "question": "<full question text>",
      // optional, but if present must be an array with 2‑4 items
      "options": ["Option 1", "Option 2"]
    }
  ]
}
```
* **header** – brief label shown to the user; must be ≤12 characters and cannot be empty.
* **question** – the actual prompt asking for the file content or path.
* **options** – *if provided* must be an array containing 2‑4 strings. When omitted, the tool presents a free‑form text input.

## Common pitfalls observed
1. **Missing `header`** – the tool rejects the call with “header must be a non‑empty string”.
2. **Header too long** – longer than 12 characters triggers validation errors.
3. **Providing `options` with the wrong shape** – an empty array or more than 4 entries causes “options must contain between 2 and 4 options”.
4. **Using incorrect top‑level key** – the tool expects `questions` (plural) not `question`.
5. **Including extra keys like `label` inside `options`** – only plain strings are allowed.

## Correct usage example
```json
{
  "metadata": {"purpose": "obtain_blade_file"},
  "questions": [
    {
      "header": "BladeFile",
      "question": "Please paste the full content of the Blade file you’d like me to make fully responsive, or provide its absolute path."
    }
  ]
}
```
*The header "BladeFile" is 9 characters, well within the limit, and we omit `options` because a free‑form response is what we need.*

## How to invoke in practice
```python
await ask_user_question({
    "metadata": {"purpose": "obtain_blade_file"},
    "questions": [{
        "header": "BladeFile",
        "question": "Please paste the full content of the Blade file you’d like me to make fully responsive, or provide its absolute path."
    }]
})
```
This will present a single input box to the user without any predefined choices, avoiding the validation errors that caused repeated retries earlier.

## When to use this skill
Whenever a task requires the assistant to receive a large snippet of Blade/HTML/CSS/JS code from the user, employ this skill to construct a valid `ask_user_question` payload. It ensures smooth interaction and prevents unnecessary retry loops.

---
*Skill created automatically on 2026‑06‑25.*