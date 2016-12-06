## resumes

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |int(14) | PK     ||
|path | varchar(200)| NOT NULL||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## users

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id |int(14) | PK     ||
|name |char(255)|NOT NULL||
|email|varchar(255)|Unique||
|phone|int(10)|Unique||
|password|varchar(255)|NOT NULL||
|user_type_id|int(3)|FK user_types||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## user_types

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int| PK||
|name| char(65)|NOT NULL||


## company_profiles

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(3)|PK||
|user_id|int(31)|Unique||
|name|char(65)|NOT NULL||
|logo|varchar(255)|||
|sector_id|int(3)|NOT NULL||
|address_id|int(3)|NOT NULL||
|description|varchar(3565)|||
|tagline|varchar(255)|||
|establishmentYear| int(4)|||
|strength|int(10)|||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## addresses

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(3)|PK||
|house_no|int(10)|||
|street|int(10)|||
|area|varchar(255)|||
|pincode|int(6)|NOT NULL||
|google_map_link|varchar(255)|||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## sectors

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name| char(225)|NOT NULL||

## jobs 

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|user_id|int(10|NOT NULL|
|title|char(1023)|NOT NULL||
|job_type_id|int(10)|NOT NULL||
|description|varchar(3565)|||
|min_salary|int(10)|||
|max_salary|int(10)|||
|opening|int(10)|||
|region_id|int(10)|||
|notice_period|nubmer(10)|||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||


## job_types

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|char(255)|||


## regions

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|char(255)|NOT NULL||
|pincode|int(6)|NOT NULL||

## students 

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|user_id|int(31)|NOT NULL||
|roll|varchar(31|NOT NULL||
|branch|varchar(255)|NOT NULL||
|semester|varchar(31)|NOT NULL
|dob|date|||
|blood_group|varchar(31)|||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## qualifications

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|pk||
|degree_id|int(10)|NOT NULL||
|region_id|int(10)|||
|year_of_passing|int(4)|NOT NULL||
|marks_obtained|int(3)|NOT NULL||
|total_marks|int(3)|NOT NULL||
|universities_id|int(10)|NOT NULL||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## degrees

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|varchar(225)|NOT NULL||

## universities

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|varchar(225)|NOT NULL||

## experiences

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|char(255)|NOT NULL||
|description|varchar(3565)|||
|region_id|int(10)|NOT NULL||
|created_at|timestamp| default=current timeStamp||
|updated_at|timestamp|onUpdate=current timestamp||

## companies

|Field | Type | Constraints | Comments |
|:----:| :----:| :----:| :----:| 
|id|int(10)|PK||
|name|char(65)|NOT NULL||

##

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

##

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

##

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

##

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

##

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

##

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

##

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

##

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

##

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

##

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

##

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

