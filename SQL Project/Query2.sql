create view laborVmaterial as
select 		[Work Order],
		tblTaskName.TaskDescription,
		isnull([Estimated Hours] *  tasksheet3.[estimate Rate],0)	'Estimated Labor Cost',
		isnull(sum(tblWork.TimeWorked) *  tasksheet3.[estimate Rate],0)		'Actual Labor Cost',
		isnull([Estimated Hours] *  tasksheet3.[estimate Rate],0) - 
		isnull(sum(tblWork.TimeWorked) *  tasksheet3.[estimate Rate],0)	'Labor Variance',
		[Estimated Materials],
		[Actual Materials],
		[Material Variance]
from tasksheet3
left join tblWork
on		tasksheet3.[Work Order] = tblWork.WorkOrderNum
and		tasksheet3.proposal = tblWork.ProposalNum
and		tasksheet3.Task = tblWork.TaskID
inner join	tblTaskName
on			tblTaskName.TaskID = tasksheet3.Task 
group by tasksheet3.[Work Order],
		tasksheet3.Task ,
		tasksheet3.proposal,
		tblTaskName.TaskDescription, 
		[Estimated Hours],
		tasksheet3.[estimate Rate],
		[Labor variance],		
		[Estimated Materials],
		[Actual Materials],
		[Material Variance]