function clock(id_cadran, time, appel)
{
	// conversion en entier des variables time et appel; au premier appel ce sont des cha�nes
	time = parseInt(time);
	appel = parseInt(appel);

	// on en fait une date
    	var d = new Date(time * 1000);

	// on r�cup�re les diff�rentes composantes
	var heure = d.getHours();
	var min = d.getMinutes();
	var sec = d.getSeconds();

	// gestion des 0 pour qu'il y ait toujours un chiffre de la forme xx
	if (heure < 10)
	{
		heure = "0" + heure;
	}
	if (min < 10)
	{
		min = "0" + min;
	}
	if (sec < 10)
	{
		sec="0"+sec;
	}



	// si elle n'existe pas on la cr�e
	if (appel == 1)
	{
		fieldset = document.createElement("fieldset");
		divHour = document.createElement("div");
		texteHeure = document.createTextNode(heure + ":" + min + ":" + sec);
		divHour.id = "divHour";

		// mise en forme du DOM

		divHour.appendChild(texteHeure);
		fieldset.appendChild(divHour);

		document.getElementById(id_cadran).appendChild(fieldset);
	}
	else // sinon on met � jour la date et l'heure
	{
		document.getElementById("divHour").childNodes.item(0).nodeValue = heure + ":" + min + ":" + sec;
	}

	// temps unix + 1
	time = time + 1;

	// incr�mentation de appel
	appel = appel + 1;

	// on rappelle la fonction apr�s une seconde
	setTimeout("clock('" + id_cadran + "', '" + time + "', '" + appel + "')",1000);
}

function day(id_cadran, time, appel)
{
	// conversion en entier des variables time et appel; au premier appel ce sont des cha�nes
	time = parseInt(time);
	appel = parseInt(appel);

	// on en fait une date
	var d = new Date(time * 1000);

	// le jour (libell�)
	var day;

	switch (d.getDay())
	{
		case 1: day = "Monday";
			break;

		case 2: day = "Tuesday";
			break;

		case 3: day = "Wednesday";
			break;

		case 4: day = "Thursday";
			break;

		case 5: day = "Friday";
			break;

		case 6: day = "Saturday";
			break;

		case 0: day = "Sunday";
			break;

		default: day = "error : " + d.getDay();
	}

	// le mois
	var month;

	switch (d.getMonth())
	{
		case 0: month = "January";
			break;

		case 1: month = "February";
			break;

		case 2: month = "March";
			break;

		case 3: month = "April";
			break;

		case 4: month = "May";
			break;

		case 5: month = "June";
			break;

		case 6: month = "July";
			break;

		case 7: month = "August";
			break;

		case 8: month = "September";
			break;

		case 9: month = "October";
			break;

		case 10: month = "November";
			break;

		case 11: month = "December";
			break;

		default: month = "error : " + d.getMonth();
	}

	var year = d.getFullYear(); // l'ann�e xxxx
	var number = d.getDate(); // le number (chiffre)

	// si elle n'existe pas on la cr�e
	if (appel == 1)
	{
		fieldset = document.createElement("fieldset");
		divDay = document.createElement("div");
		texteDate = document.createTextNode(day + " " + number + " " + month + " " + year);
		divDay.id = "divDay";

		// mise en forme du DOM
		divDay.appendChild(texteDate);
		fieldset.appendChild(divDay);

		document.getElementById(id_cadran).appendChild(fieldset);
	}
	else // sinon on met � number la date et l'heure
	{
		document.getElementById("divDay").childNodes.item(0).nodeValue = day + " " + number + " " + month + " " + year;
	}

	// temps unix + 1
	time = time + 1;

	// incr�mentation de appel
	appel = appel + 1;

	// on rappelle la fonction apr�s une seconde
	setTimeout("day('" + id_cadran + "', '" + time + "', '" + appel + "')",1000);
}
