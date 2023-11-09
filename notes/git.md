# Git notes

## Github Shortcuts

- Use the . (period) key to change github repo view to developer mode
- [Keyboard shortcuts](https://docs.github.com/en/get-started/using-github/keyboard-shortcuts)
- [The github.dev web-based editor](https://docs.github.com/en/codespaces/the-githubdev-web-based-editor)

## Introduction to Git

- [Git Installation for Windows](https://git-scm.com/)
- [Git Installation for Mac](https://formulae.brew.sh/formula/git) using [Homebrew](https://brew.sh/)
- [Git and GitHub for Beginners - Crash Course](https://www.youtube.com/watch?v=RGOj5yH7evk)
- [Sourcetree](https://www.sourcetreeapp.com/)

## Configure username and email

```bash
git config --global user.name "Peter Ng"
git config --global user.email "ngy@vaniercollege.qc.ca"
```

## Checkout branches

To list all existing branches on your local repository:

```bash
git branch
```

To checkout an existing branch:

```bash
git checkout -b branch-name
```

To create a branch and immediately checkout:

```bash
git checkout -b branch-name
```
