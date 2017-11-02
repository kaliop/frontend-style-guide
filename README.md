# Kaliop's frontend style guide

A coding guide for frontend code, to be used by the frontend team and other coders within Kaliop.

Read online at: https://kaliop.github.io/frontend-style-guide/

## Making changes to content

Content is written in Markdown in the `content` folder, then compiled to static HTML using Kirby CMS and the [StaticBuilder plugin](https://github.com/fvsch/kirby-staticbuilder).

Installation:

1. Clone this repo.
2. Install dependencies: `composer install`.
3. Run `php --server localhost:8080` and navigate to `http://localhost:8080/index.php/`

To build content changes:

1. Visit `http://localhost:8080/index.php/staticbuilder/` and click “Build Everything”.
2. You should have an updated static build in the `docs` folder.
3. Commit the changes and push to GitHub (we use GitHub pages).
