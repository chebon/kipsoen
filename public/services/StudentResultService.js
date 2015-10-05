/**
 * Created by dennis on 05/11/20.
 */


/**
 * Created by dennis on 2/26/15.
 */



var kipsoen = angular.module('StudentResultService', ['ngResource']);

kipsoen.factory('ResultsFactory', function ($resource) {
    return $resource('/studentResults', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('ResultFactory', function ($resource) {
    return $resource('/studentResults/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});