/**
 * Created by dennis on 2/24/15.
 */



var kipsoen = angular.module('parentService', ['ngResource']);

kipsoen.factory('ParentsFactory', function ($resource) {
    return $resource('/parents', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('ParentFactory', function ($resource) {
    return $resource('/parents/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});