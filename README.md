M1-Customer-Attribute
========================
Create custom attributes for customer and create custom data source type

Features
--------

* create custom attributes for customer through sql setup
* for select type attributes, create custom data source type under Model/Customer/Attribute
* grab data source type info and display in html through Block/Select.php (used in account create page)

Notes
-----

* to add new attribute or modify existing create a sql update file with new version number and update version number in config.xml
* to create a new data source type, name the file the same name as the attribute without any space and all lower characters
* pass in the attribute code as parameter to Block/Select.php and html will generate accordingly

Changelog
---------

### 1.0.0 [2017-09-21]

* fully working extension release