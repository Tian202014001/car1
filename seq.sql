CREATE SEQUENCE
car_id_SEQUENCE
INCREMENT BY 1
START WITH 1000
MAXVALUE 9999999999999999
NOCYCLE ;


CREATE SEQUENCE
customer_id_SEQUENCE
INCREMENT BY 1
START WITH 1000
MAXVALUE 9999999999999999
NOCYCLE ;

CREATE SEQUENCE
serice_id_SEQUENCE
INCREMENT BY 1
START WITH 1000
MAXVALUE 9999999999999999
NOCYCLE ;

CREATE SEQUENCE
branch_id_SEQUENCE
INCREMENT BY 1
START WITH 1000
MAXVALUE 9999999999999999
NOCYCLE ;



create table car
(
    v_id varchar2(20),
    status varchar2(20),
    brannd varchar2(20),
    model varchar2(20),
    color varchar2(20),
    manufacturing_country varchar2(20),
    year varchar2(20),
    import_date Date,
    engine_cc varchar2(20),
    body_type varchar2(20),
    dimension varchar2(20),
    Weight varchar2(20),
    seat varchar2(20),
    fuel_capacity varchar2(20),
    top_speed varchar2(20),
    acceleration varchar2(20),
    power varchar2(20),
    fuel_consumtion varchar2(20),
    milage varchar2(20),
    price number(10,0),
    img_dir varchar2(255),
    branch_id varchar2(20),
    customer_id varchar2(20),
    constraint car_car_id_pk primary key(v_id)
);

create table test_ride
(
tr_id varchar2(20),
v_id varchar2(20),
customer_id varchar2(20),
s_time varchar2(20),
r_time varchar2(20),
tr_date date,
action varchar2(20),
constraint tr_tr_id_pk primary key(tr_id,customer_id,v_id)
);




create table branch(
branch_id varchar2(20),
b_capacity number(10),
b_contact_no varchar2(20),
b_city varchar2(20),
b_state varchar2(20),
b_street_no varchar2(20),
constraint branch_branch_id_pk primary key(branch_id)
);
create table branch_restock(
branch_id varchar2(20),
b_capacity number(10),
b_contact_no varchar2(20),
b_city varchar2(20),
b_state varchar2(20),
b_street_no varchar2(20),
constraint branch_restock_branch_id_pk primary key(branch_id)
);

create table customer(
customer_id varchar2(20),
customer_name varchar2(20),
c_email varchar2(100),
c_phone varchar2(20),
C_password varchar2(20),
DOB date,
c_state varchar2(20),
c_city varchar2(20),
c_streetNo varchar2(20),
constraint customer_customer_id_pk primary key(customer_id)
);


CREATE or REPLACE TRIGGER branch_Restock_Trigger
BEFORE UPDATE OF b_capacity
ON branch
FOR EACH ROW
WHEN (New.b_capacity < 20)
BEGIN
INSERT INTO branch_restock VALUES (:old.branch_id,
:new.b_capacity, :old.b_contact_no, :old.b_city,
:old.b_state,:old.b_street_no  );
END;


create table repair(
service_id varchar2(20),
part_name varchar2(20),
r_amount number(20),
repair_date date
);

create table maintainance(
service_id varchar2(20),
type varchar2(20),
m_amount number(20),
maintainance_date date
);


create table engine_diagnosis(
service_id varchar2(20),
report varchar2(255),
ed_amount number(20),
ed_date date
);

create table services(
service_id varchar2(20),
v_model varchar2(20),
reg_no varchar2(20),
bill number(20),
customer_id varchar2(20),
constraint service_service_id_pk primary key(service_id)
);



