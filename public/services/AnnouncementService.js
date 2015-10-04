/**
 * Created by dennis on 04/10/15.
 */


/**
 * Created by dennis on 11/09/15.
 */

var kipsoen = angular.module('announcementService', ['ngResource']);

kipsoen.factory('AnnouncementsFactory', function ($resource) {
    return $resource('/announcements', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('AnnouncementFactory', function ($resource) {
    return $resource('/announcements/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});
