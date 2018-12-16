var map = AmCharts.makeChart("mapdiv",{
type: "map",
theme: "light",
projection: "mercator",
panEventsEnabled : true,
backgroundColor : "#535364",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : true
},
dataProvider : {
map : "worldHigh",
getAreasFromMap : true,
areas :
[
	{
		"id": "AX",
		"showAsSelected": true
	},
	{
		"id": "AL",
		"showAsSelected": true
	},
	{
		"id": "AD",
		"showAsSelected": true
	},
	{
		"id": "AM",
		"showAsSelected": true
	},
	{
		"id": "AT",
		"showAsSelected": true
	},
	{
		"id": "AZ",
		"showAsSelected": true
	},
	{
		"id": "BY",
		"showAsSelected": true
	},
	{
		"id": "BE",
		"showAsSelected": true
	},
	{
		"id": "BA",
		"showAsSelected": true
	},
	{
		"id": "BG",
		"showAsSelected": true
	},
	{
		"id": "HR",
		"showAsSelected": true
	},
	{
		"id": "CY",
		"showAsSelected": true
	},
	{
		"id": "CZ",
		"showAsSelected": true
	},
	{
		"id": "DK",
		"showAsSelected": true
	},
	{
		"id": "EE",
		"showAsSelected": true
	},
	{
		"id": "FO",
		"showAsSelected": true
	},
	{
		"id": "FI",
		"showAsSelected": true
	},
	{
		"id": "FR",
		"showAsSelected": true
	},
	{
		"id": "GE",
		"showAsSelected": true
	},
	{
		"id": "DE",
		"showAsSelected": true
	},
	{
		"id": "GI",
		"showAsSelected": true
	},
	{
		"id": "GR",
		"showAsSelected": true
	},
	{
		"id": "GG",
		"showAsSelected": true
	},
	{
		"id": "HU",
		"showAsSelected": true
	},
	{
		"id": "IS",
		"showAsSelected": true
	},
	{
		"id": "IM",
		"showAsSelected": true
	},
	{
		"id": "IT",
		"showAsSelected": true
	},
	{
		"id": "JE",
		"showAsSelected": true
	},
	{
		"id": "XK",
		"showAsSelected": true
	},
	{
		"id": "LV",
		"showAsSelected": true
	},
	{
		"id": "LI",
		"showAsSelected": true
	},
	{
		"id": "LT",
		"showAsSelected": true
	},
	{
		"id": "LU",
		"showAsSelected": true
	},
	{
		"id": "MK",
		"showAsSelected": true
	},
	{
		"id": "MT",
		"showAsSelected": true
	},
	{
		"id": "MD",
		"showAsSelected": true
	},
	{
		"id": "MC",
		"showAsSelected": true
	},
	{
		"id": "ME",
		"showAsSelected": true
	},
	{
		"id": "NL",
		"showAsSelected": true
	},
	{
		"id": "NO",
		"showAsSelected": true
	},
	{
		"id": "PL",
		"showAsSelected": true
	},
	{
		"id": "PT",
		"showAsSelected": true
	},
	{
		"id": "RO",
		"showAsSelected": true
	},
	{
		"id": "RU",
		"showAsSelected": true
	},
	{
		"id": "SM",
		"showAsSelected": true
	},
	{
		"id": "RS",
		"showAsSelected": true
	},
	{
		"id": "SK",
		"showAsSelected": true
	},
	{
		"id": "SI",
		"showAsSelected": true
	},
	{
		"id": "ES",
		"showAsSelected": true
	},
	{
		"id": "SJ",
		"showAsSelected": true
	},
	{
		"id": "SE",
		"showAsSelected": true
	},
	{
		"id": "CH",
		"showAsSelected": true
	},
	{
		"id": "TR",
		"showAsSelected": true
	},
	{
		"id": "UA",
		"showAsSelected": true
	},
	{
		"id": "GB",
		"showAsSelected": true
	},
	{
		"id": "VA",
		"showAsSelected": true
	},
	{
		"id": "CA",
		"showAsSelected": true
	},
	{
		"id": "CU",
		"showAsSelected": true
	},
	{
		"id": "JM",
		"showAsSelected": true
	},
	{
		"id": "MX",
		"showAsSelected": true
	},
	{
		"id": "US",
		"showAsSelected": true
	},
	{
		"id": "AR",
		"showAsSelected": true
	},
	{
		"id": "BO",
		"showAsSelected": true
	},
	{
		"id": "BR",
		"showAsSelected": true
	},
	{
		"id": "CL",
		"showAsSelected": true
	},
	{
		"id": "CO",
		"showAsSelected": true
	},
	{
		"id": "EC",
		"showAsSelected": true
	},
	{
		"id": "FK",
		"showAsSelected": true
	},
	{
		"id": "GF",
		"showAsSelected": true
	},
	{
		"id": "ZA",
		"showAsSelected": true
	},
	{
		"id": "BD",
		"showAsSelected": true
	},
	{
		"id": "IN",
		"showAsSelected": true
	},
	{
		"id": "MM",
		"showAsSelected": true
	},
	{
		"id": "NP",
		"showAsSelected": true
	},
	{
		"id": "PK",
		"showAsSelected": true
	},
	{
		"id": "PS",
		"showAsSelected": true
	}
]
},
areasSettings : {
    autoZoom : true,
    color : "#B4B4B7",
    colorSolid : "#F9E79F",
    selectedColor : "#F9E79F",
    outlineColor : "#666666",
    rollOverColor : "#9EC2F7",
    rollOverOutlineColor : "#000000"
    }
    });