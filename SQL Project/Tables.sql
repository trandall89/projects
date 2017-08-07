CREATE TABLE tblCustomerType
(CustomerTypeID	char(2),
Description	varchar(30),
constraint	pkcustomerType
primary key	(CustomerTypeID));

CREATE TABLE tblEstimationMethod
(MethodID	char(2),
Description	varchar(30),
constraint	pkMethodID
primary key	(MethodID));

CREATE TABLE tblStatus
(StatusID		char(2),
Description		varchar(30),
constraint		pkStatus
primary key		(StatusID));

CREATE TABLE tblTaskName
(TaskID				char(2),
TaskDescription		varchar(30),
constraint			pkTaskName
primary key			(TaskID));

CREATE TABLE tblZip
(ZipID		varchar(10),
City		varchar(30),
State		varchar(30),
constraint	pkZip
primary key	(ZipID));

CREATE TABLE tblCustomer
(CustID			char(5),
CustName		varchar(30),
CustAddress		varchar(30),
CustomerTypeID	char(2),
CONSTRAINT		pkCustomer
primary key		(CustID),
Constraint		fkcustomer1
foreign key		(CustomerTypeID)
references		tblCustomerType(CustomerTypeID));

CREATE TABLE tblLocation
(LocationID				CHAR(5),
LocationName			CHAR(20),
LocationAddress			CHAR(20),
ZipID					VARCHAR(10),
CustomerID				CHAR(5),
CONSTRAINT				LOCPK
PRIMARY KEY				(LocationID),
CONSTRAINT				LOCFK1
FOREIGN KEY				(ZipID)
REFERENCES				tblZip(ZipID),
CONSTRAINT				LOCFK2
FOREIGN KEY				(CustomerID)
REFERENCES				tblCustomer(CustID));

create table    tblWorkOrder
(WorkOrderNum   varchar(15),
DateAccepted    datetime,
Notes           varchar(30),
DateRequired    datetime,
LocationID      char(5)
constraint      pkWorkOrder
primary key     (WorkOrderNum),
constraint      fkWorkOrder
foreign key     (LocationID)
references      tblLocation(LocationID));

CREATE TABLE tblEmployeeInfo
(EmpID		char (6),
EmpLastName	varchar(30),
EmpFirstName	varchar(30),
EmpEmail	varchar(30),
EmpPhone	char(10),
EmpMgrID	char(6),
ZipID		varchar(10),
constraint	pkemployeeInfo
primary key	(EmpID),
constraint	fk1empmgridInfo
foreign key	(EmpMgrID)
references	tblEmployeeInfo(EmpID),
constraint	fk2ZipID
foreign key	(ZipID)
references	tblZip(ZipID));

CREATE TABLE tblMaterials
(MaterialID		char(2),
Description		varchar(30),
UOM			Char(10),
constraint		pkMaterial
primary key		(MaterialID));

create table    tblProposal
(ProposalNum    char(5),
CustomerID      char(5),
DateWritten     datetime,
StatusID        char(2),
DecisionDate    datetime,
constraint      pkProposal
primary key     (ProposalNum),
constraint      fkProposal1
foreign key     (CustomerID)
references      tblCustomer(CustID),
constraint      fkProposal2
foreign key     (StatusID)
references      tblStatus(StatusID));

CREATE TABLE tblTask
(TaskID			char(2),
ProposalNum    	char(5),
WorkOrderNum	varchar(15),
SQRFeet			decimal(6,2),
EstHours		decimal(6,2),
EstRate			decimal(6,2),
StatusID		Char(2),
DateStart		Datetime,
DateEnd			Datetime,
MethodID		char(2),
constraint		pkTask
primary key		(TaskID,ProposalNum,WorkOrderNum),
constraint		fk1Task
foreign key		(TaskID)
references		tblTaskName(TaskID),
constraint		fk2Proposal
foreign key		(ProposalNum)
references		tblProposal(ProposalNum),
constraint		fk3WorkOrder
foreign key		(WorkOrderNum)
references		tblWorkOrder(WorkOrderNum),
constraint		fk4Status
foreign key		(StatusID)
references		tblStatus(StatusID),
constraint	fkMethodID
foreign key	(MethodID)
references	tblEstimationMethod(MethodID));

CREATE TABLE tblWork
(EmpID			char (6),
TaskID			char(2),
ProposalNum    	char(5),
WorkOrderNum	varchar(15),
TimeWorked		decimal(6,2),
PayRate			decimal(6,2),
constraint		pkWork
primary key		(EmpID,TaskID,ProposalNum,WorkOrderNum),
constraint		fk1EmpID
foreign key		(EmpID)
references		tblEmployeeInfo(EmpID),
constraint		fkConcat1
foreign key		(TaskID,ProposalNum,WorkOrderNum)
references		dbo.tblTask(TaskID,ProposalNum,WorkOrderNum));

CREATE TABLE tblMaterialAssignment
(TaskID					CHAR(2),
ProposalNumber			CHAR(5),
WorkOrderNumber			VARCHAR(15),
MaterialID				CHAR(2),
MaterialCost			Money,
MaterialQuantity		DECIMAL(8,2),
EstMaterials			decimal(6,2),
EstCost					Money,
CONSTRAINT				MatAssignPK
PRIMARY KEY				(MaterialID,TaskID,ProposalNumber,WorkOrderNumber),
CONSTRAINT				MatAssignMatFK2
FOREIGN KEY				(MaterialID)
REFERENCES				tblMaterials(MaterialID),
constraint				fkConcatMat
foreign key				(TaskID,ProposalNumber,WorkOrderNumber)
references				dbo.tblTask(TaskID,ProposalNum,WorkOrderNum));
