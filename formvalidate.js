
function firvalidate()
{
alert("hello User");
var check = document.getElementsByClassName('check');
var fname = document.fir.fname.value; 
var lname = document.fir.lname.value;
var mob = document.fir.mob.value;
var email = document.fir.email.value;
var checkgen = document.getElementsByClassName('checkgen');
var date = new Date(document.fir.hdate.value);
var location = document.fir.location.value;
var pincode = document.fir.pincode.value;
var city = document.fir.city.value;
var states = document.fir.states.value;
var country = document.fir.country.value;
var desc = document.fir.desc.value;
var person = document.fir.person.value;
var file = document.fir.file.value;
var agree = document.fir.agree;
if(chcrime(check))
{
if(chname(fname, lname))
{
if(chmob(mob))
{
if(chemail(email))
{
if(chgender(checkgen))
{
if(chdate(date))
{
if(chlocation(location))
{
if(chpincode(pincode))
{
if(chcity(city))
{
if(chstates(states))
{
if(chcountry(country))
{
if(chdesc(desc))
{
if(chperson(person))
{
if(chfile(file))
{
if(chagree(agree))
{
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
return false;
}


function chcrime(check)
{
x=0;

for( i=0; i<4; i++)
{
if(check[i].checked === true)
{
x++;
}
}

if(x==0)
{
alert('Please Select Incident Type');
c1.focus();
c2.focus();
c3.focus();
c4.focus();
return false;
}
else
{
return true;
}
}

function chname(fname, lname)
{
var fnlen = fname.length;
var lnlen = lname.length;
if (fnlen == 0 || lnlen == 0 || fnlen >= 12 || fnlen < 2 || lnlen >= 12 || lnlen <3)
{
alert("Please check first name and last name");
fname.focus();
lname.focus();
return false;
}
return true;
}

function chmob(mob)
{
var phoneno = /^\d{10}$/;
if(mob.match(phoneno))
{
return true;
}
else
{
alert("Please check phone number");
mob.focus();
return false;
}
}

function chemail(email)
{
var mailformat = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/gm;
if(email.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}

function chgender(checkgen)
{
x=0;

for( i=0; i<3; i++)
{
if(checkgen[i].checked === true)
{
x++;
}
}

if(x==0)
{
alert('Please Select Gender');
mgender.focus();
fgender.focus();
ogender.focus();
return false;
}
else
{
return true;
}
}

function chdate(date)
{
if(date.getFullYear() > 2020)
{
alert("Please check date");
date.focus();
return false;
}
return true;
}

function chlocation(location)
{ 
var letters = /^[a-zA-Z0-9\s,.'-]{3,}$/;
if(location.match(letters))
{
return true;
}
else
{
alert('Location must have alphanumeric characters only');
location.focus();
return false;
}
}

function chpincode(pincode)
{ 
var numbers = /^[0-9]+$/;
if(pincode.match(numbers))
{
return true;
}
else
{
alert('pin code must have numeric characters only');
pincode.focus();
return false;
}
}

function chcity(city)
{
var citylen = city.length;
if (citylen == 0 || citylen >= 12 || citylen < 3)
{
alert("Please check city");
city.focus();
return false;
}
return true;
}

function chstates(states)
{
if(states == "default")
{
alert('Select your state from the list');
states.focus();
return false;
}
else
{
return true;
}
}

function chcountry(country)
{
var countrylen = country.length;
if (countrylen == 0 || countrylen >= 12 || countrylen < 3)
{
alert("Please check country");
country.focus();
return false;
}
return true;
}

function chdesc(desc)
{
var desclen = desc.length;
if (desclen == 0 || desclen < 10)
{
alert("Please describe complaint properly");
desc.focus();
return false;
}
return true;
}

function chperson(person)
{
if (person == 0 || person >= 20 )
{
alert("Please check number of person ");
person.focus();
return false;
}
return true;
}

function chfile(file)
{
var fileextension = /(\.jpg|\.pdf|\.jpeg|\.png|\.gif)$/i;
if(!fileextension.exec(file))
{
alert('Please upload file having extensions .jpeg/\.pdf|.jpg/.png/.gif');
fileInput.value = '';
return false;
}
else
{
return true;
}
}

function chagree(agree)
{
x=0;

if(agree.checked) 
{
x++;
} 
if(x==0)
{
alert('Please agree the terms and condition');
agree.focus();
return false;
}
else
{
alert('FIR Form Submitted Successfully');
window.location.reload()
return true;
}
}




















































