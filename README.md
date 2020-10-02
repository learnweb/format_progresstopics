# Moodle course format Progresstopic

The course format Progresstopic prepends the activity section of a course with progressindicators for various course completion criteria.

## Installation
To install the Progresstopics format, the topics format needs to be installed. 
Clone the progresstopic format into the course/format folder of your moodle Installation <br>
Run the following command in the root o your moodle installation. <br>
```git clone git@github.com:rtschu/format_progresstopics.git course/format/progresstopics```

## Using the format in a course

### Adding the format to the course
To use the format in a course navigate to the course. Then under Administration -> Course administration -> edit settings -> Course format select `Progresstopics Format` for the `Format` option. Alternatively this can be done directly when creating the course.

### Displaying progress
If you have not done so already you will need to add course completin criteria for the format to display progress to the students. <br>
This can be done by navigating to Administration -> Course administration -> Course completion


Under `Activity completion` you can select activities that are supposed to be tracked, activities will be grouped by the section they belong to.
Notice that you may enable completion tracking for the activity itself. This can be done comfortably in the `Bulk edit activity completion` Tab.

Under `Course grade` you can set a number of points that are needed to pass the course. The course grade criteria will not be grouped.

