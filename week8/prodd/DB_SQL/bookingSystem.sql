/* Sample tables and data for stock database example using SQLite. */

CREATE TABLE IF NOT EXISTS Vehicles (
    Vehicle_id INTEGER PRIMARY KEY AUTOINCREMENT,
    Rego VARCHAR(30) UNIQUE NOT NULL,
    Make VARCHAR(20) NOT NULL,
    Model VARCHAR(20) NOT NULL,
    YearModel INT DEFAULT '2020' NOT NULL,
    Odometer INT DEFAULT '123456' NOT NULL,
    Capacity INT,
    Transmision VARCHAR(20),
	Type VARCHAR(20),
    img VARCHAR(20));


CREATE TABLE IF NOT EXISTS Clients (
    Name VARCHAR(20),
    Age INT NOT NULL,
    LisenceNo VARCHAR(20) UNIQUE NOT NULL,
    LicenceType VARCHAR(20) NOT NULL,
    Gender VARCHAR(20) DEFAULT 'N' NOT NULL,
    Client_id INTEGER PRIMARY KEY AUTOINCREMENT);
	
CREATE TABLE IF NOT EXISTS Bookings (
    Booking_id INTEGER PRIMARY KEY AUTOINCREMENT,
    LisenceNo VARCHAR(20) NOT NULL REFERENCES Clients(LisenceNo),
    Rego VARCHAR(20) NOT NULL REFERENCES Vehicles(Rego),
    Pickup DATE,
    Dropoff DATE);


INSERT or REPLACE INTO Vehicles(Rego, Make, Model, YearModel, Odometer, Capacity, Transmision, Type,img)
	VALUES 
("438•SFD","Toyota","Kluger",2020,899133,7,"Automatic","[Urban Wagon]",'klugger.jpg'),
("202•XRP","Toyota","Commuter",2020,302161,12,"Automatic","[Small Bus]",'commuter.jpg'),
("361•CPA","Mitsubishi","Pajero",2020,262816,7,"Automatic","[Premium 4WD]",'pajeroFull4WD.png'),
("546•YQM","Kia","Carnival",2020,954307,8,"Automatic","[Intermediate Van]",'carnival.jpg'),
("910•ALD","Mitsubishi","Pajero",2020,982213,7,"Automatic","[Full Size Wagon,Sport]",'pajero_sport.jpg'),
("717•WWS","Mitsubishi","Outlander",2020,783020,5,"Automatic","[Intermediate Wagon]",'outlander.png'),
("108•PCK","Mitsubishi","Eclipse Cross",2020,660787,5,"Automatic","[Medium]",'eclipse.png'),
("557•GLM","Holden","Commodore SV6",2020,401105,5,"Automatic","[Sports, Sedan]",'commodore.jpg'),
("102•QZX","Mitsubishi","ASX",2020,518747,5,"Automatic","[Compact SUV]",'asx.png'),
("229•YAG","Toyota","Camry",2020,76356,5,"Automatic","[Sedan]",'camry.jpg'),
("749•TMI","Toyota","Corolla",2020,596046,5,"Automatic","[Sedan]",'corolla_sedan.png'),
("838•SAK","KIA","Cerato",2020,67491,5,"Automatic","[Intermediate]",'cerrato.jpg'),
("845•STB","Toyota","Corolla",2020,953867,5,"Automatic","[Compact Car,Sedan]",'corolla_sedan.png'),
("232•PHZ","Toyota","Yaris",2020,596542,5,"Automatic","[Economy]",'yaris.jpg'),
("931•LWK","MG","HS",2020,216511,5,"Automatic","[Compact SUV]",'mg.png'),
("899•IPV","Mitsubishi","Mirage",2020,948839,5,"Automatic","[Metro]",'mirage.png'),
("732•FTU","Mitsubishi","Pajero",2020,447986,5,"Automatic","[Full Size 4WD]",'pajeroFull4WD.png'),
("091•JRX","Suzuki","Jimny",2020,804612,4,"Automatic","[Medium]",'jiminy.jpg'),
("090•UPA","Toyota","Yaris",2020,328506,5,"Manual","[Economy]",'yaris2.jpg'),
("291•UID","Toyota","Hilux",2020,218447,5,"Automatic","[4WD, Dual Cab, Utility]",'hilux.png');


INSERT or REPLACE INTO Clients(Name, Age, LisenceNo, LicenceType, Gender)
	VALUES 
    ("Robbie Stanton",20,"463114561","P2","M"),
    ("Hubert Haskins",37,"456381499","O","M"),
    ("Trina Wilkinson",36,"189842264","O","F"),
    ("Elias Dorsey",66,"541385107","O","M"),
    ("Raquel Bright",25,"489956400","P2","F"),
    ("Bert Robbins",40,"848625699","O","M"),
    ("Mandy Fulton",44,"566816835","O","F"),
    ("Christi McKee",78,"439787458","O","F"),
    ("Abigail Hammond",59,"050637716","O","F"),
    ("Johanna Rivers",57,"400870333","O","F"),
    ("Tracy Ashley",22,"131637347","P1","F"),
    ("Meredith Ewing",69,"555502853","O","F"),
    ("Danny Dalton",43,"496724067","O","M");

CREATE TABLE IF NOT EXISTS Bookings (
    Booking_id INTEGER PRIMARY KEY AUTOINCREMENT,
    LisenceNo VARCHAR(20) NOT NULL REFERENCES Clients(LisenceNo),
    Rego VARCHAR(20) NOT NULL REFERENCES Vehicles(Rego),
    Pickup DATE,
    Dropoff DATE);

INSERT or REPLACE INTO Bookings(LisenceNo, Rego, Pickup, Dropoff)
	VALUES 
    ("463114561","438•SFD","2021-08-30","2021-09-05"),
    ("456381499","202•XRP","2021-09-06","2021-09-12"),
    ("189842264","361•CPA","2021-09-13","2021-09-19"),
    ("131637347","546•YQM","2021-09-20","2021-09-26");
-- INSERT INTO Stock(Name, Quantity, Price, Description)
-- 	VALUES 
-- 	("Marcel's Morsels", 1500, 1.25, "Delectable delicious delicacies");
-- INSERT INTO Stock(Name, Quantity, Price, Description)
-- 	VALUES 
-- 	("Fred's Fries", 1000, 0.75, "Fabulous french fries");
-- INSERT INTO Stock(Name, Quantity, Price, Description)
-- 	VALUES 
-- 	("Craig's Cabbages", 500, 15.00, "Cool & crazy cabbages");

-- INSERT INTO Customers(Name, Address, Email)
-- 	VALUES 
-- 	("Bob", "123 Fake St, Logan", "bob@someisp.com");
-- INSERT INTO Customers(Name, Address, Email)
-- 	VALUES 
-- 	("Sally", "1000 Fun St, Nathan", "sally@gmail.com");
-- INSERT INTO Customers(Name, Address, Email)
-- 	VALUES 
-- 	("John", "700 Friendly St, Woodridge", "john@anotherisp.com");

-- INSERT INTO Orders(ItemId, CustId, OrderDate, Quantity)
-- 	VALUES 
-- 	(1, 1, "2006-03-22", 10);
-- INSERT INTO Orders(ItemId, CustId, OrderDate, Quantity)
-- 	VALUES 
-- 	(1, 3, "2006-03-23", 20);
-- INSERT INTO Orders(ItemId, CustId, OrderDate, Quantity)
-- 	VALUES 
-- 	(2, 2, "2006-03-24", 30);
-- INSERT INTO Orders(ItemId, CustId, OrderDate, Quantity)
-- 	VALUES 
-- 	(2, 3, "2006-03-24", 40);

/* 
 * The statements inserting rows into table Orders are very bad style.
 * They assume you know the ItemId and CustId of each order.
 * But, in practice, these would only be known to some program
 * that had retrieved them by a search on ItemName or CustName,
 * or by following some reference to them.
 *
 * So better style wold be to execute a sequence of insertions
 * such as this:

INSERT INTO Orders(ItemId, CustId, OrderDate, Quantity)
	SELECT item.Id, cust.Id, "2006-03-26", 100
	FROM Stock item, Customers cust
	WHERE item.Name = "Marcel's Morsels"
	AND cust.Name = "Bob";

 * Note that this statement could add more than one order if there 
 * were more than one customer named "Bob" (which is possible with
 * this schema).
 */ 