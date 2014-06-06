'use strict';

/* Services */

angular.module('app.services', []).

    value('version', '0.1').
    value('lang', {}).

    provider('$LanguageProvider', function () {
        this.$get = function () {
            var that = this;
            return {
                getArtist: function () {
                    return that._artist;
                },
                thingOnConfig: that.thingFromConfig
            }
        }
    });

// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('app.services', []).

