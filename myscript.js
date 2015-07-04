function addOptions()
{
	var table = document.getElementById("preferences");
	var rowcount = table.rows.length;
	var colCount = table.rows[0].cells.length;
	if (rowcount<7)
	{
		var row = table.insertRow(rowcount);
		for (var i=0; i<colCount; i++)
		{
			cell = row.insertCell(i)
			cell.innerHTML= table.rows[0].cells[i].innerHTML;
			if (i==0) 
				{
					cell.childNodes[1].setAttribute("name", "priority"+(rowcount+1));
				}
			if (i==1) 
				{
					cell.childNodes[1].setAttribute("name", "day"+(rowcount+1));
					cell.childNodes[2].setAttribute("name", "month"+(rowcount+1));					
				}

		}
	}
	else
		window.alert("Cannot enter more than 7 preferences");

}


function removeOptions()
{
	var table = document.getElementById("preferences");
	var rowCount = table.rows.length;
	if (rowCount>1)
		table.deleteRow(rowCount-1);
	else
		window.alert("Cannot delete all preferences");
}