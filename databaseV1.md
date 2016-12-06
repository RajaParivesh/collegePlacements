## resumes

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |nuber(14) | PK     ||
|path | varchar(200)| NOT NULL||
|create_at|timestamp| default=current timeStamp||
|update_at|timestamp|onUpdate=current timestamp||

## users

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |number(14) | PK     ||
|name |char(65)|NOT NULL||
|email|varchar(255)|Unique||
|phone|number(10)|Unique||
|password|varchar(255)|NOT NULL||
|user_type|number(3)|FK user_types||
|create_at|timestamp| default=current timeStamp||
|update_at|timestamp|onUpdate=current timestamp||

## user_types

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number| PK||
|name| char(65)|NOT NULL||


## company_profiles

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
|establishmentYear| number(4)|||
|strength|number(10)|||
|create_at|timestamp| default=current timeStamp||
|update_at|timestamp|onUpdate=current timestamp||

## addresses

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|house_no|number(10)|||
|street|number(10)|||
|area|varchar(255)|||
|pincode|number(6)|NOT NULL||
|google_map_link|varchar(255)|||
|create_at|timestamp| default=current timeStamp||
|update_at|timestamp|onUpdate=current timestamp||

## sectors

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number(10)|PK||
|name| char(225)|NOT NULL||

## job 

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number(10)|PK||
|user_id|number(10|NOT NULL|
|title|char(1023)|NOT NULL||
|job_type_id|number(10)|NOT NULL||
|description|varchar(3565)|||
|min salary|number(10)|||
|max salary|number(10)|||
|opening|number(10)|||
|region_id|number(10)|||
|notice_period|nubmer(10)|||
|create_at|timestamp| default=current timeStamp||
|update_at|timestamp|onUpdate=current timestamp||


## job_types

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number(10)|PK||
|name|char(255)|||


## region

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|number(10)|PK||
|name|char(255)|NOT NULL||
|pin code|number(6)|NOT NULL||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||

##

|||||
|||||
|||||
|||||
|||||
|||||
|||||
|||||


