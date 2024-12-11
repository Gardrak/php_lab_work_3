<?php

namespace App;

class MagicClass {
  public function __construct() {
    echo "__construct\n";}
public function __destruct() {
    echo "__destruct\n";}
public function __call($name, $arguments) {
    echo "__call: $name\n";}
public static function __callStatic($name, $arguments) {
    echo "__callStatic: $name\n";}
public function __get($name) {
    echo "__get: $name\n";}
public function __set($name, $value) {
    echo "__set: $name = $value\n";  }
public function __isset($name) {
    echo "__isset: $name\n";}
public function __unset($name) {
    echo "__unset: $name\n";}
public function __toString() {
    return "__toString\n";}
public function __invoke($arguments) {
    echo "__invoke\n";}

public function __debugInfo() {
    return ["__debugInfo"];}
public function __clone() {
    echo "__clone\n";}
}