# Composer Package

This is just an empty composer package I can quickly clone when I'd like to start on a new package for Laravel.

It is made up of a simple structure which contains a composer file, service provider and config file.

### Usage

If you'd like to use this code, simply cd into your Laravel project's vendor directory, create a directory for yourself and your package and clone this repo into that directory.

##### Example

```bash
cd vendor

mkdir [vendor name]

cd [vendor name]

mkdir [package name]

cd [package name]

git clone https://github.com/Cloud5Ideas/package.git
```

Replace **[vendor name]** with your name/ github account name/ whatever.

Replace **[package name]** with the name of your package.

Once the repo has been cloned, you can start editing the `composer.json` file, the `src/config/package.php` file and the `src/Package/PackageServiceProvider.php` file.

>Just remember to rename all the files and folders in `src` to the appropriate names for your package as well as rename the `MyVendor\MyPackage*` namespace of each file.

---

###### Delete this and everything above this line

# Package Name

Package description

Documentation
-------------
For more information and how to use Package: Read the [Documentation Wiki](https://github.com/Vendor/Package/wiki)

Quick Installation
------------------
Describe installation

```
composer require myvendor/mypackage:dev-master
```

Once this operation is complete, simply add the service provider to your project's `config/app.php` file:

#### Service Provider
```
'MyVendor\MyPackage\PackageServiceProvider',
```