# organ_donation

## Project
Today, in Ontario, there are over 1,500 people waiting for a lifesaving organ transplant. This is their only treatment option, and every 3 days someone will die because they did not get their transplant in time. We are actively involved in raising awareness and education for organ and tissue donation and transplantation. We maintain a national transplant registry for inter-provincial organ sharing and related programs and we help save and improve lives by working closely with the organ and tissue donation and transplantation communities.

### Project Structure

![image](https://github.com/an-liu1/organ_donation/raw/master/public/Diagram.png)


This image shows the main structure of this project!

## Getting Started

### Technical description

#### Front End
To improve the front-end user experience:

    1. Datatable(table plugin)
    2. Layer(Javascript Plugin)
    3. Webuploader(uplode Plugin)
    
#### Back end
To meet the project requirements and improve the development efficiency and the convenience of later operation

    1. LaravelExcel
    2. RBAC
    3. Paying API(later developing)
    
#### Safty
In the project, all the corresponding sensitive fields, including the user password, use irreversible encryption methods to strictly encrypt the data.

    1. Laravel brcypt
    
### Prerequisites

In order to make the project operate well, there is some software necessarily:

#### Developing environment: windows + apache + mysql + php
##### Version requirement:
     windows：≥ win xp
  	 apache：≥ 2.2
     mysql：≥ 5.5
     php：≥ 7.0

#### Developing Framework: 
     Laravel

#### Database:
Import organ_donation.sql to you database, and then change the parameter in the .env file:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=organ_donation
    DB_USERNAME=root
    DB_PASSWORD=

#### Developing tool:
    1. Visual Studio Code
    2. Cmder/Powershell
    3. Composer

#### Developing Languages:
    1. HTML5
    2. CSS
    3. Javascript
    4. jQuery
    5. PHP
    
#### Supported Databases (PDO)
    Mysql
    
#### Extra supported extensions
    1. Faker
    2. Captcha

### Versioning
* 0.1.0 Working in progress
* 0.1.1 Deleting useless files
* 0.2.0 Change: update code and images
* 0.3.3 Change: update README.md

### Authors 
* An Liu --- Developer

### License

MIT License

