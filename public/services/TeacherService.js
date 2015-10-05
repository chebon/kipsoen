/**
 * Created by dennis on 2/24/15.
 */



var kipsoen = angular.module('teacherService', ['ngResource']);

kipsoen.factory('TeachersFactory', function ($resource) {
    return $resource('/teachers', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('TeacherFactory', function ($resource) {
    return $resource('/teachers/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});