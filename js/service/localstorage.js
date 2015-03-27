app.service('localstorageservice', function($http, $q, $timeout){

var prefix='bs_';

var isDefined = angular.isDefined,
  isUndefined = angular.isUndefined,
  isNumber = angular.isNumber,
  isObject = angular.isObject,
  isArray = angular.isArray,
  extend = angular.extend,
  toJson = angular.toJson,
  fromJson = angular.fromJson;

// ajouter une fonction pour setter le prefixe comme on veut

var deriveQualifiedKey = function(key) {
  return prefix + key;
};

this.getFromLocalStorage = function (key) {
	var values=[];
	values=JSON.parse(localStorage.getItem(deriveQualifiedKey(key)))
	return values;
};

var addToLocalStorage = function (key, value) {

  if (isUndefined(value)) {
    value = null;
  } else if (isObject(value) || isArray(value) || isNumber(+value || value)) {
    value = toJson(value);
  }

  localStorage.setItem(deriveQualifiedKey(key),value);
return true
}

this.add = function(key, value){
	var values = this.getFromLocalStorage(key);
	if (values === null && isDefined(value)) { 
		var values= [{id : value}];
	} else 
	  {
	  	values.push({id : value});
	  }
	addToLocalStorage(key,values);
	return(true);
}

});