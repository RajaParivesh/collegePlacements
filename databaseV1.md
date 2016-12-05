## resumes

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |nuber(14) | PK     ||
|path | varchar(200)| NOT NULL||
|timestamp create|timestamp| default=current timeStamp||
|timestamp update|timestamp|onUpdate=current timestamp||

## users

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |number(14) | PK     ||
|name |char(65)|NOT NULL||
|email|varchar(255)|Unique||
|phone|number(10)|Unique||
|password|varchar(255)|NOT NULL||
|user_type|number(3)|FK user_types||
|timestamp create|timestamp| default=current timeStamp||
|timestamp update|timestamp|onUpdate=current timestamp||

## user_types

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number| PK||
|name| char(65)|NOT NULL||


## company profiles

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number(3)|PK||
|user_id|number(31)|Unique||
|name|char(65)|NOT NULL||
|logo|varchar(255)|||
|sector_id|number(3)|NOT NULL||
|address_id|number(3)|NOT NULL||
|sector_id|number(3)|NOT NULL||
|description|varchar(3565)|||
|tagline|varchar(255)|||
|stablishmentYear| number(4)|||
|strength|number(10)|||
|timestamp create|timestamp| default=current timeStamp||
|timestamp update|timestamp|onUpdate=current timestamp||

## address

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|house_no|number(10)|||
|street|number(10)|||
|area|varchar(255)|||
|pincode|number(6)|NOT NULL||
|google_map_link|varchar(255)|||
|timestamp create|timestamp| default=current timeStamp||
|timestamp update|timestamp|onUpdate=current timestamp||

## sector 

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

## job 

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

