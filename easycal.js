function getEvents(){

  return [
    {
      id : 'E01',
      title : 'Meeting with BA',
      start : '27-10-2015 10:30:00',
    end : '27-10-2015 11:00:00',
     backgroundColor: '#443322',
      textColor : '#FFF'
    },
    {
      id : 'E01',
      title : 'Lunch',
      start : '27-10-2015 12:30:00',
      end : '27-10-2015 13:00:00',
      backgroundColor: '#12CA6B',
      textColor : '#FFF'
    },
    {
      id : 'E02',
      title : 'Customer Appointment',
      start : '29-10-2015 09:00:00',
      end : '29-10-2015 09:30:00',
      backgroundColor: '#34BB22',
      textColor : '#FFF'
    },
    {
      id : 'E03',
      title : 'Buddy Time',
      start : '30-10-2015 11:00:00',
      end : '30-10-2015 12:30:00',
      backgroundColor: '#AA3322',
      textColor : '#FFF'
    }
];

  $('.mycal').easycal({
columnDateFormat : 'dddd, DD MMM',
timeFormat : 'HH:mm',
minTime : '08:00:00',
maxTime : '19:00:00',
slotDuration : 15, //in mins
dayClick : null,
eventClick : null,
events : [],

widgetHeaderClass : 'ec-day-header',
widgetSlotClass : 'ec-slot',
widgetTimeClass : 'ec-time'
});

