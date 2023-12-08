CREATE TABLE "user" (
  "user_id" int PRIMARY KEY,
  "username" varchar(255),
  "password" varchar(255),
  "email" varchar(50),
  "phone" varchar(10)
);

CREATE TABLE "order" (
  "order_id" int PRIMARY KEY,
  "user_id" int,
  "order_date" DATE,
  "status" varchar(50)
);


CREATE TABLE "test" (
  "test_id" int PRIMARY KEY,
  "test_name" varchar(50),
  "test_description" varchar(100),
  "price" int
);


ALTER TABLE "order"
ADD CONSTRAINT fk_user
FOREIGN KEY ("user_id")
REFERENCES "user"("user_id");


  
SELECT * FROM "order";


INSERT INTO "user" ("user_id", "username", "password", "email", "phone")
VALUES
  (1, 'john_doe', 'password123', 'john.doe@example.com', '1234567890'),
  (2, 'jane_smith', 'pass456', 'jane.smith@example.com', '9876543210'),
  (3, 'bob_jones', 'secret123', 'bob.jones@example.com', '5551234567'),
  (4, 'alice_davis', 'p@ssw0rd', 'alice.davis@example.com', '7890123456'),
  (5, 'emily_white', 'letmein', 'emily.white@example.com', '4567890123'),
  (6, 'sam_green', 'sam_pass', 'sam.green@example.com', '6789012345'),
  (7, 'lisa_jackson', 'lisa_pass', 'lisa.jackson@example.com', '1237894560'),
  (8, 'michael_brown', 'michael_pass', 'michael.brown@example.com', '9870123456'),
  (9, 'olivia_martin', 'olivia_pass', 'olivia.martin@example.com', '2345678901'),
  (10, 'david_wilson', 'david_pass', 'david.wilson@example.com', '5678901234');


INSERT INTO "order" ("order_id", "user_id", "order_date", "status")
VALUES
  (101, 1, '2023-01-15', 'Done'),
  (102, 2, '2023-02-20', 'Pending'),
  (103, 3, '2023-03-10', 'Done'),
  (104, 4, '2023-04-05', 'Pending'),
  (105, 5, '2023-05-12', 'Done'),
  (106, 6, '2023-06-20', 'Pending'),
  (107, 7, '2023-07-08', 'Done'),
  (108, 8, '2023-08-15', 'Pending'),
  (109, 9, '2023-09-25', 'Done'),
  (110, 10, '2023-10-02', 'Pending');


INSERT INTO "test" ("test_id", "test_name", "test_description", "price")
VALUES
  (201, 'Blood Test', 'Complete blood count', 500),
  (202, 'X-Ray', 'Chest X-ray', 750),
  (203, 'MRI Scan', 'Brain MRI', 1500),
  (204, 'COVID-19 Test', 'PCR test', 30),
  (205, 'Cholesterol Test', 'Cholesterol level check', 250),
  (206, 'Eye Exam', 'Vision check-up', 400),
  (207, 'Dental Checkup', 'Routine dental examination', 600),
  (208, 'Glucose Test', 'Blood sugar level test', 350),
  (209, 'Bone Density Scan', 'DEXA scan for bone health', 900),
  (210, 'Ultrasound', 'ultrasound', 550);

SELECT * FROM "user";
SELECT * FROM "order";
SELECT * FROM "test";

