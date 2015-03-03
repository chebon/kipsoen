/**
 * Created by dennis on 2/24/15.
 */


var kipsoen = angular.module('studentService', ['ngResource']);

kipsoen.factory('StudentsFactory', function ($resource) {
    return $resource('/students', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('StudentFactory', function ($resource) {
    return $resource('/students/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});