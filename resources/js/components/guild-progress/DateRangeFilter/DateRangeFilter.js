import React, {PureComponent} from 'react'
import {DateRangePicker} from 'react-dates';
import 'react-dates/lib/css/_datepicker.css';
import 'react-dates/initialize';
import moment from 'moment';

export default class DateRangeFilter extends PureComponent {
    state = {
        startDate: this.props.startDate,
        endDate: this.props.endDate,
        focusedInput: null
    }

    render() {
        moment.locale('ru');
        const {startDate, endDate, focusedInput} = this.state
        return (
            <DateRangePicker
                showClearDates
                reopenPickerOnClearDates
                isOutsideRange={() => false}
                startDatePlaceholderText="Начало"
                endDatePlaceholderText="Конец"
                startDate={startDate} // momentPropTypes.momentObj or null,
                startDateId="startDateId" // PropTypes.string.isRequired,
                endDate={endDate} // momentPropTypes.momentObj or null,
                endDateId="endDateId" // PropTypes.string.isRequired,
                onDatesChange={({startDate, endDate}) => {
                    this.setState({startDate, endDate});
                }}// PropTypes.func.isRequired,
                onClose = {this.props.onClose({startDate, endDate}) }
                focusedInput={focusedInput} // PropTypes.oneOf([START_DATE, END_DATE]) or null,
                onFocusChange={focusedInput => this.setState({focusedInput})} // PropTypes.func.isRequired,
            />
        )
    }
}