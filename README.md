# PHP Program

A collection of beginner PHP practice programs covering output, variables, operators, form handling with `$_GET` and `$_POST`, and small form-based programs. Files `1st.php` to `8th.php` follow the order the topics were learned.

## Table of Contents

- [Project Structure](#project-structure)
- [Programs](#programs)
- [Getting Started](#getting-started)
- [Notes](#notes)
- [Author](#author)

## Project Structure

```
PHP-Program/
├── 1st.php          # Hello world, echo, and comments
├── 2nd.php          # Variables and data types
├── 3rd.php          # Multiplying two numbers
├── 4th.php          # Arithmetic operators
├── 5th.php          # Increment/decrement and assignment operators
├── 6th.php          # Operator precedence
├── 7th.php          # Login form using $_GET
├── 8th.php          # Login form using $_POST
├── factorial.php    # Factorial calculator form
├── greaterNo.php    # Greatest of three numbers form
├── index.php        # First PHP web page
└── README.md
```

## Programs

### Basics

| File | What it demonstrates |
| --- | --- |
| `index.php` | A first PHP web page: HTML with an embedded `echo "Hello world"` |
| `1st.php` | `echo`, single-line (`//`) and multi-line (`/* */`) comments |
| `2nd.php` | Variables and the four basic data types: string, integer, float, and boolean |
| `3rd.php` | Storing numbers in variables and multiplying them |

### Operators

| File | What it demonstrates |
| --- | --- |
| `4th.php` | Arithmetic operators: `+`, `-`, `*`, `/`, `**`, and `%` |
| `5th.php` | Increment/decrement operators (`++`, `--`) and compound assignment (`+=`, `-=`) |
| `6th.php` | Operator precedence: `()`, `**`, `* / %`, then `+ -` |

### Handling Form Data

| File | What it demonstrates |
| --- | --- |
| `7th.php` | A login form that sends data with `$_GET`: data is appended to the URL, not secure, has a character limit, can be bookmarked and cached |
| `8th.php` | The same login form with `$_POST`: data is sent in the request body, more secure, no data limit, cannot be bookmarked or cached |

### Form-Based Programs

| File | What it demonstrates |
| --- | --- |
| `factorial.php` | Enter a number and calculate its factorial using a `while` loop |
| `greaterNo.php` | Enter three numbers and find the greatest using nested `if` / `else if` |

## Getting Started

### Prerequisites

- PHP installed locally, or a local server stack such as XAMPP, WAMP, or MAMP

### Run the programs

**Option 1: PHP built-in server**

```bash
git clone https://github.com/AmanPatil2002/PHP-Program.git
cd PHP-Program
php -S localhost:8000
```

Then open `http://localhost:8000/index.php` (or any other file) in your browser.

**Option 2: XAMPP / WAMP**

1. Copy the project folder into the server's web root (`htdocs` for XAMPP, `www` for WAMP).
2. Start Apache.
3. Open `http://localhost/PHP-Program/index.php` in your browser.

Files that contain only PHP code (`1st.php` to `6th.php`) can also be run from the command line, for example `php 4th.php`.

## Notes

- PHP files must be served through a PHP-enabled server (or the CLI). Opening them directly in a browser shows the source code instead of the output.
- `7th.php` and `8th.php` print the submitted values straight away, so they show warnings about missing `username` and `password` values on the first page load, before the form is submitted.
- `greaterNo.php` prints nothing when the first two numbers are equal.

## Author

**Aman Patil** — [@AmanPatil2002](https://github.com/AmanPatil2002)
