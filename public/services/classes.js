/**
 * Created by dennis on 17/10/15.
 */



var kipsoen = angular.module('classService', ['ngResource']);

kipsoen.factory('ClassesFactory', function ($resource) {
    return $resource('/classes', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('ClassFactory', function ($resource) {
    return $resource('/classes/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});