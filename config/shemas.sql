create table users (
    id int auto_increment primary key,
    username varchar(50) not null unique,
    email varchar(100) not null unique,
    password varchar(255) not null,
    role ENUM('admin', 'customer') not null default 'customer',
    is_active boolean not null default true,
    created_at timestamp default current_timestamp
);

create table dishes (
    id int auto_increment primary key,
    name varchar(255) not null,
    description text not null,
    price float not null,
    is_active boolean not null default true,
    created_at timestamp default current_timestamp
);

create table tables (
    id int auto_increment primary key,
    number int not null unique,
    capacity int not null,
    is_active boolean not null default true,
    created_at timestamp default current_timestamp
);

create table bookings (
    id int auto_increment primary key,
    user_id int not null,
    table_id int not null,
    number_of_guests int not null,
    booking_time datetime not null,
    booking_date date not null,
    status ENUM('pending', 'confirmed', 'cancelled') not null default 'pending',
    is_active boolean not null default true,
    created_at timestamp default current_timestamp,
    foreign key (user_id) references users(id),
    foreign key (table_id) references tables(id)
);