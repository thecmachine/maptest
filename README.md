## Clint's Map OOP Test

## Relationships/Architecture 
    Models contain relationships for Location, starting from Location Model we can see the relationships to Street, City, State, ZipCode, Latitude and Longitude.

    I opted not to associate State and ZipCode because I can't think of a situation where we'd want to know a states list of zip codes.

## Migrations
    Migration files show the creation of the tables and their datatypes to view how the relationships tie together.

## Controllers
    I added two functions to LocationController, sameSideOfStreet() and distanceBetweenLocations() just to begin implementation of the request.

## Unit Tests
    I added two quick unit tests for two functions in LocationController

## Future of Application 
    To support multiple path finding solutions I added Latitude and Longitude as well as a future solution involving the StreetCongestion model. 

    With StreetCongestion we can see current streets with congestion/traffic for estimation.

    Combined with a direct line solution with Latitude and Longitude to calculate a MAX and MIN time barometer.

    I added a StreetCongestionController for future mindset, since there was no CRUD requirements I didn't use ResourceControllers, I feel the ResourceControllers would pull their information from the LocationController, so this supports the logic for the architecture but there's no Route testing.


