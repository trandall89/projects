Insert Into tblCustomerType values('AA','OEM');
Insert Into tblCustomerType values('AB','Distributor');
Insert Into tblCustomerType values('AC','Manufacturer');

Insert Into tblEstimationMethod values('SR','Site Review');
Insert Into tblEstimationMethod values('CD','Custom Design');
Insert Into tblEstimationMethod values('FP','Floor Plan');

Insert Into tblStatus values('PE','Pending');
Insert Into tblStatus values('IP','In Progress');
Insert Into tblStatus values('CP','Completed');
Insert Into tblStatus values('AC','Accepted');
Insert Into tblStatus values('RJ','Rejected');
Insert Into tblStatus values('NS','Not Started');

Insert Into tblTaskName values('RE','Remove Existing Floor');
Insert Into tblTaskName values('CM','Clean Mold');
Insert Into tblTaskName values('IS','Install Sub-Floor');

Insert Into tblZip values('89434-8802','Sparks','Nevada');
Insert Into tblZip values('99878-4654','Carson City','Nevada');
Insert Into tblZip values('85864-7958','Las Vegas','Nevada');

Insert Into tblCustomer values('C1111','Caseys Deli','4854 North St.','AA');
Insert Into tblCustomer values('C1112','Light Bulbs by Billy','78 W. 2nd','AB');
Insert Into tblCustomer values('C1113','Sparkys Bar and Grill','23 Main St.','AA');

Insert Into tblLocation values('SPAC1','Front Office','23 Main St.','89434-8802','C1111');
Insert Into tblLocation values('SPAC2','Back Office','24 Main St.','99878-4654','C1112');

Insert Into tblEmployeeInfo values('E11113','Chris Ercolin','999 Mars Landing','CERCLINDO@hotmail.com','1234567893',NULL,'89434-8802');
Insert Into tblEmployeeInfo values('E11112','Tim Randall','7548 Jupiter Wy.','TRANDO@gmail.com','1234567892','E11113','89434-8802');
Insert Into tblEmployeeInfo values('E11114','Abdul Moallin','951 Sun St.','ZULUMaster@msn.com','1234567894','E11112','89434-8802');
Insert Into tblEmployeeInfo values('E11111','Jimmy Ling','8898 Moon Ln.','JLINGO@gmail.com','1234567891','E11112','89434-8802');

Insert Into tblMaterials values('M1','Dry Wall', 'Each');
Insert Into tblMaterials values('M2','Floor Tiles', 'Bundle');
Insert Into tblMaterials values('M3','Ceiling Tiles', 'Sqr Foot');
Insert Into tblMaterials values('M4','Mold Killer', 'Gallon');
Insert Into tblMaterials values('M5','No Material Needed', 'None');

Insert Into tblProposal values('P0001','C1111','08/15/2011','AC','08/17/2011');
Insert Into tblProposal values('P0002','C1112','09/15/2011','IP',NULL);
Insert Into tblProposal values('P0003','C1113','09/16/2011','AC','09/18/2011');

Insert Into tblWorkOrder values('W00000000000001','08/17/2011','Proposal Accepted','09/17/2011','SPAC1');
Insert Into tblWorkOrder values('W00000000000002','09/18/2011','Proposal Accepted','10/17/2011','SPAC2');

Insert Into tblTask values('RE','P0001','W00000000000001','2000','30','12','CP','09/18/2011','09/22/2011','SR');
Insert Into tblTask values('CM','P0001','W00000000000001','90','5','18','IP','09/23/2011',NULL,'SR');
Insert Into tblTask values('IS','P0001','W00000000000001','2000','40','16','NS',NULL,NULL,'SR');
Insert Into tblTask values('RE','P0002','W00000000000002','1000','28','20','CP','09/20/2011','09/24/2011','FP');
Insert Into tblTask values('IS','P0002','W00000000000002','1000','15','25','IP','09/25/2011',NULL,'FP');

Insert Into tblMaterialAssignment values('IS','P0001','W00000000000001','M2','20','3','2','4');
Insert Into tblMaterialAssignment values('IS','P0002','W00000000000002','M2','20','2','2','1');
Insert Into tblMaterialAssignment values('CM','P0001','W00000000000001','M4','5','2','3','3');
Insert Into tblMaterialAssignment values('RE','P0001','W00000000000001','M5','0','0','0','0');
Insert Into tblMaterialAssignment values('RE','P0002','W00000000000002','M5','0','0','0','0');

Insert Into tblWork values('E11114','RE','P0001','W00000000000001','12','10');
Insert Into tblWork values('E11111','RE','P0001','W00000000000001','9','10');
Insert Into tblWork values('E11112','RE','P0001','W00000000000001','9','10');
Insert Into tblWork values('E11114','CM','P0001','W00000000000001','2','10');
Insert Into tblWork values('E11112','RE','P0002','W00000000000002','9','14');
Insert Into tblWork values('E11113','RE','P0002','W00000000000002','10','28');
Insert Into tblWork values('E11114','IS','P0002','W00000000000002','5','20');