select	[Work Order],
		custName					'Customer Name',
		sum([Estimated Hours])		'Estimated Hours',
		sum([Actual Hours])			'Actual Hours',
		Sum([Labor Variance])		'Labor Variance',
		sum([Estimated Materials])	'Estimated Materials',
		sum([Actual Materials])		'Actual Materials',
		sum([Material Variance])	'Material Variance'
from tasksheet3
left join		tblProposal
on				tblproposal.proposalnum = tasksheet3.proposal
left join		tblcustomer
on				tblproposal.customerID = tblcustomer.custID
group by [Work Order],custName