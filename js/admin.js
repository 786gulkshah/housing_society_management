// function complaints()
// {
// 	document.getElementById("complaints").onclick = function () 
// 	{
//             // alert('changing also .. see now');
//             // document.getElementById("complaintShow").style.color = "red";
//                 console.log("called this to");
//     } 
// }


// function committee()
// {
// 	document.getElementById("committee").onclick = function () 
// 	{

//     } 
// }


// function enquiry()
// {
// 	document.getElementById("enquiry").onclick = function () 
// 	{

//     } 
// }



// function payment()
// {
// 	document.getElementById("payment").onclick = function () 
// 	{
    
//     } 
// }



function meeting()
{
	document.getElementById("meeting").onclick = function () 
	{
	    var x = document.getElementById("meetingForm");
		if (x.style.display === "none") 
		{
		    x.style.display = "block";
		} 
		else 
		{
		    x.style.display = "none";
		}
    } 
}



function notices()
{
	document.getElementById("notices").onclick = function () 
	{
	    var x = document.getElementById("noticeForm");
		if (x.style.display === "none") 
		{
		    x.style.display = "block";
		} 
		else 
		{
		    x.style.display = "none";
		}

    } 
}