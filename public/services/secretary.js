/**
 * Created by dennis on 05/11/20.
 */


/**
 * Created by dennis on 2/24/15.
 */


var kipsoen = angular.module('secretaryService', ['ngResource']);

kipsoen.factory('SecretariesFactory', function ($resource) {
    return $resource('/secretaries', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('SecretaryFactory', function ($resource) {
    return $resource('/secretaries/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});