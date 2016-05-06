# PHP Arabic numerals converted to Chinese numerals tools.

[![Packagist](https://img.shields.io/packagist/l/doctrine/orm.svg?maxAge=2592000)](https://raw.githubusercontent.com/mouson/chinese-numerals/master/LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/mouson/chinese-numerals.svg?style=flat)](https://packagist.org/packages/mouson/chinese-numerals)
[![Build Status](https://travis-ci.org/mouson/chinese-numerals.svg?branch=master)](https://travis-ci.org/mouson/chinese-numerals)

## Introduction

The PHP arabic numerals converted to Chinese numerals tools.

## Installation

Run this command to add this library to your `composer.json` file:

    composer require mouson/chinese-numerals

## Quick Start Guide

### use

```php
use Mouson\Helpers\ChineseNumericHelper;
```

### arabic numerals converted to lower case chinese numerals

```php
$chinese = ChineseNumericHelper::Numeric2Chinese(123);
echo $chinese; \\ 一百二十三
```

### arabic numerals converted to upper case chinese numerals

```php
$chinese = ChineseNumericHelper::Numeric2Chinese(123, true);
echo $chinese; \\ 壹佰貳拾參
```

---

# 阿拉伯數字轉換為中文數字工具

## 簡介

一個阿拉伯數字轉換為中文數字的工具。

## 安裝

執行以下指令將此套件加入到 `composer.json` 檔案:

    composer require mouson/chinese-numerals

## 使用

### 引用

```php
use Mouson\Helpers\ChineseNumericHelper;
```

### 小寫中文轉換

```php
$chinese = ChineseNumericHelper::Numeric2Chinese(123);
echo $chinese; \\ 一百二十三
```

### 大寫中文轉換

```php
$chinese = ChineseNumericHelper::Numeric2Chinese(123, true);
echo $chinese; \\ 壹佰貳拾參
```
