Create view CustomerWork as
select	[Customer Name],
		sum([Estimated Hours])		'Estimated Hours',
		sum([Actual Hours])			'Actual Hours',
		Sum([Labor Variance])		'Labor Variance',
		sum([Estimated Materials])	'Estimated Materials',
		sum([Actual Materials])		'Actual Materials',
		sum([Material Variance])	'Material Variance'
from clientWO
group by 	[Customer Name]