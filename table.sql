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

create table employee(
employee_id varchar2(20),
employee_name varchar2(20),
e_email varchar2(100),
e_phone varchar2(20),
e_password varchar2(20),
DOB date,
e_position varchar2(20),
e_city varchar2(20),
constraint employee_employee_id_pk primary key(employee_id)
);

CREATE SEQUENCE
employee_id_SEQUENCE
INCREMENT BY 1
START WITH 50000
MAXVALUE 9999999999999999
NOCYCLE ;



create table payment(
    customer_name varchar2(20),
    payment_id varchar2(20),
    v_id varchar2(20),
    payment_date date,
    total_cost varchar2(20),
    constraint payment_payment_id_pk primary key(payment_id)
);

CREATE SEQUENCE
payment_id_SEQUENCE
INCREMENT BY 1
START WITH 150000
MAXVALUE 9999999999999999
NOCYCLE ;





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



CREATE SEQUENCE
branch_id_SEQUENCE
INCREMENT BY 1
START WITH 1000
MAXVALUE 9999999999999999
NOCYCLE ;
