# Workspace Core

Extendible workspace configurator for Laravel to effortlessly keep linters, fixers, static analysis, CI workflows, editor integrations and more in sync across all your teams & projects

[![codestyle](https://github.com/media-code/workspace-core/actions/workflows/codestyle.yml/badge.svg)](https://github.com/media-code/workspace-core/actions/workflows/codestyle.yml)
[![tests](https://github.com/media-code/workspace-core/actions/workflows/tests.yml/badge.svg)](https://github.com/media-code/workspace-core/actions/workflows/tests.yml)
[![coverage](https://img.shields.io/codecov/c/github/media-code/workspace-core?token=ON4MTY8C1B&color=45%2C190%2C65)](https://codecov.io/gh/media-code/workspace-core)

<!-- [![Packagist Downloads ](https://img.shields.io/packagist/dt/gedachtegoed/workspace-core?color=45%2C190%2C65)
](https://packagist.org/packages/gedachtegoed/workspace-core) -->

## Introduction

Workspace Core is the enige used by [gedachtegoed/workspace](https://github.com/media-code/workspace).
You can use this package to ship your own organization wide project defaults and keep them up to date with a upstream repository.

Workspace's Fluent Integrations enable automation of **_linting_**, **_fixing_**, **_ci workflows_**, **_editor integrations_** & **_composer scripts_**. You can even use it to automate setting up [IDE helper](https://github.com/barryvdh/laravel-ide-helper) integrations in your project. Using custom hooks you can pretty much automate any Integration setup or repetetive task and keep it in sync with your entire team across different projects.

The [Workspace](https://github.com/media-code/workspace) package itself is a predefined Portable Workspace you can use as a well thought out but opinionated baseline for your Laravel projects. If you don't plan on creating your own presets we recommend to start there.

## Portable Workspaces

If you'd like to roll out your own Portable Workspace you'd create a new composer package that uses the Workspace Core as a dependency. A template project & comprehensive API reference & guide is in the works.
