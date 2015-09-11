/**
 * Created by dennis on 11/09/15.
 */

var kipsoen = angular.module('examinationService', ['ngResource']);

kipsoen.factory('ExaminationsFactory', function ($resource) {
    return $resource('/examinations', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('ExaminationFactory', function ($resource) {
    return $resource('/examinations/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});
