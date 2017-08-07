create view tasksheet3 as
select			tbltask.WorkOrderNum		'Work Order',
			tbltask.ProposalNum			'Proposal',
			tbltask.TaskID				'Task',
			tblTask.EstHours					'Estimated Hours',
			tblTask.estRate					'estimate Rate',
			isnull(sum(TimeWorked),0)				'Actual Hours',
			isnull(sum(TimeWorked),0) - EstHours	'Labor variance',
			EstMaterials *
			EstCost				'Estimated Materials',
			MaterialQuantity *
			MaterialCost				'Actual Materials',
			EstMaterials * 
			EstCost	 -
			MaterialQuantity *
			MaterialCost				'Material Variance'
from		tblTask
left join	tblWork
on			tblWork.WorkOrderNum = tblTask.WorkOrderNum
and			tblwork.TaskID = tbltask.TaskID
and			tblwork.ProposalNum = tbltask.ProposalNum
left join	tblTaskName
on			tblTaskName.TaskID = tbltask.TaskID
left join	tblMaterialAssignment
on			tblMaterialAssignment.TaskID = tblTask.TaskID
and			tblMaterialAssignment.ProposalNumber = tbltask.ProposalNum
and			tblMaterialAssignment.WorkOrderNumber = tbltask.WorkOrderNum
left join	tblStatus
on			tblTask.StatusID = tblStatus.StatusID
group by	tbltask.WorkOrderNum,TaskDescription,EstHours,EstMaterials,MaterialCost,MaterialQuantity, tbltask.ProposalNum, 		tbltask.TaskID,tblTask.estRate,EstCost	
