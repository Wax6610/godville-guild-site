import React, { PureComponent } from "react";
import { Table, Pagination, Form, Progress } from "semantic-ui-react";
import _ from "lodash";
import "./style.css";

export default class MainTable extends PureComponent {
    state = {
        column: null,
        direction: null,
        pagination: {
            totalPages: 0,
            activePage: 1,
            perPage: 50
        },
        data: {
            rawData: [],
            filteredData: []
        },
        filter: {
            clan_position: "",
            name: ""
        },
        maxCellValues: {
            bricks_cnt: 0,
            wood_cnt: 0,
            savings: 0,
            arena_won: 0,
            arena_lost: 0,
            ark_m: 0,
            ark_f: 0
        }
    };

    /* Получаем данные для актвной страницы */
    getActivePageData = () => {
        const {
            pagination: { perPage, activePage },
            data: { filteredData }
        } = this.state;
        const offset = (activePage - 1) * perPage;

        return filteredData.slice(offset).slice(0, perPage);
    };

    /* Пажинация. переключение страниц */
    handlePageChange = (event, data) => {
        this.setState({
            pagination: {
                ...this.state.pagination,
                activePage: data.activePage
            }
        });
    };

    /*Сортировка данных в столбцах таблицы */
    handleSort = clickedColumn => () => {
        const {
            column,
            direction,
            data: { filteredData }
        } = this.state;

        if (column !== clickedColumn) {
            this.setState({
                column: clickedColumn,
                direction: "descending",
                data: {
                    ...this.state.data,
                    filteredData: _.orderBy(
                        filteredData,
                        [clickedColumn],
                        ["desc"]
                    )
                }
            });
            return;
        }
        this.setState({
            data: { ...this.state.data, filteredData: filteredData.reverse() },
            direction: direction === "ascending" ? "descending" : "ascending"
        });
    };

    /* Обработчик изменения параметров фильтра  типа Select*/
    handleSelectFilterChange = (event, data) => {
        this.setState(
            {
                filter: { ...this.state.filter, [data.name]: data.value }
            },
            () => {
                this.filterData();
            }
        );
    };
    /* Обработчик изменения параметров фильтра  типа Input*/
    handleInputFilterChange = event => {
        this.setState(
            {
                filter: {
                    ...this.state.filter,
                    [event.target.name]: event.target.value.toLowerCase()
                }
            },
            () => {
                this.filterData();
            }
        );
    };

    /*Определение максимального значения в ячейкаъ данных для отрисовски Progress компонента*/
    getMaxcellValues = rawData => {
        let maxCellValues = {
            bricks_cnt: 0,
            wood_cnt: 0,
            savings: 0,
            arena_won: 0,
            arena_lost: 0,
            ark_m: 0,
            ark_f: 0
        };

        rawData.map(row => {
            if (row.bricks_cnt > maxCellValues.bricks_cnt)
                maxCellValues.bricks_cnt = row.bricks_cnt;
            if (row.wood_cnt > maxCellValues.wood_cnt)
                maxCellValues.wood_cnt = row.wood_cnt;
            if (row.savings > maxCellValues.savings)
                maxCellValues.savings = row.savings;
            if (row.arena_won > maxCellValues.arena_won)
                maxCellValues.arena_won = row.arena_won;
            if (row.arena_lost > maxCellValues.arena_lost)
                maxCellValues.arena_lost = row.arena_lost;
            if (row.ark_m > maxCellValues.ark_m)
                maxCellValues.ark_m = row.ark_m;
            if (row.ark_f > maxCellValues.ark_f)
                maxCellValues.ark_f = row.ark_f;
        });

        return maxCellValues;
    };

    tableInit = rawData => {
        const { perPage } = this.state.pagination;
        const maxCellValues = this.getMaxcellValues(rawData);
        this.setState(
            {
                column: null,
                direction: null,
                pagination: {
                    ...this.state.pagination,
                    activePage: 1,
                    totalPages: Math.ceil(rawData.length / perPage)
                },
                data: {
                    ...this.state.data,
                    rawData: rawData
                },
                maxCellValues
            },
            () => {
                this.filterData();
            }
        );
    };

    /* Фильтрация данных*/
    filterData = () => {
        const {
            data: { rawData },
            pagination: { perPage },
            filter,
            column,
            direction
        } = this.state;

        let filteredData = rawData
            .filter(
                row =>
                    filter.clan_position === "" ||
                    row.clan_position === filter.clan_position
            )
            .filter(
                row =>
                    filter.name === "" ||
                    row.name.toLowerCase().indexOf(filter.name) > -1
            );

        if (column !== null) {
            const orderDirection = direction === "descending" ? "desc" : "asc";
            filteredData = _.orderBy(filteredData, [column], [orderDirection]);
        }

        this.setState({
            //column: null, direction: null,
            data: { ...this.state.data, filteredData: filteredData },
            pagination: {
                ...this.state.pagination,
                totalPages: Math.ceil(filteredData.length / perPage)
            }
        });
    };

    componentDidMount() {
        this.tableInit(this.props.rawData);
    }

    componentWillReceiveProps(nextProps) {
        this.tableInit(nextProps.rawData);
    }

    render() {
        const {
            column,
            direction,
            maxCellValues,
            pagination: { totalPages, activePage }
        } = this.state;

        const activePageData = this.getActivePageData();

        return (
            <React.Fragment>
                <Table
                    sortable
                    compact
                    celled
                    striped
                    padded
                    className="main-table"
                >
                    <MainTableHeader
                        column={column}
                        direction={direction}
                        handleSort={this.handleSort}
                        handleSelectFilterChange={this.handleSelectFilterChange}
                        handleInputFilterChange={this.handleInputFilterChange}
                    />

                    <MainTableBody
                        activePageData={activePageData}
                        maxCellValues={maxCellValues}
                    />
                </Table>
                <Pagination
                    onPageChange={this.handlePageChange}
                    totalPages={totalPages}
                    activePage={activePage}
                />
            </React.Fragment>
        );
    }
}

const MainTableHeader = props => {
    const filterClanPosition = [
        { text: "", value: "" },
        { text: "хранитель", value: "хранитель" },
        { text: "пророк", value: "пророк" },
        { text: "регент", value: "регент" },
        { text: "патриарх", value: "патриарх" },
        { text: "иерарх", value: "иерарх" },
        { text: "кардинал", value: "кардинал" },
        { text: "грандмастер", value: "грандмастер" },
        { text: "советник", value: "советник" },
        { text: "магистр", value: "магистр" },
        { text: "адепт", value: "адепт" },
        { text: "стажёр", value: "стажёр" }
    ];
    const {
        column,
        direction,
        handleSort,
        handleInputFilterChange,
        handleSelectFilterChange
    } = props;
    const headers = [
        { name: "name", title: "Бог", filter: "input" },
        { name: "level", title: "Уровень" },
        {
            name: "clan_position",
            title: "Звание",
            filter: "select",
            filterOptions: filterClanPosition
        },
        { name: "bricks_cnt", title: "Кирпичи" },
        { name: "wood_cnt", title: "Бревна" },
        { name: "savings", title: "Сбережения" },
        { name: "arena_won", title: "Побед" },
        { name: "arena_lost", title: "Поражений" },
        { name: "ark_m", title: "Самцов" },
        { name: "ark_f", title: "Самок" }
    ];

    return (
        <Table.Header>
            <Table.Row>
                {headers.map(header => (
                    <Table.HeaderCell
                        key={header.name}
                        sorted={column === header.name ? direction : null}
                        onClick={handleSort(header.name)}
                    >
                        {header.title}
                    </Table.HeaderCell>
                ))}
            </Table.Row>
            <Table.Row>
                {headers.map(header => (
                    <Table.Cell key={header.name}>
                        {header.filter === "input" ? (
                            <Form.Input
                                name={header.name}
                                onChange={handleInputFilterChange}
                            />
                        ) : (
                            ""
                        )}
                        {header.filter === "select" ? (
                            <Form.Select
                                options={header.filterOptions}
                                name={header.name}
                                onChange={handleSelectFilterChange}
                            />
                        ) : (
                            ""
                        )}
                    </Table.Cell>
                ))}
            </Table.Row>
        </Table.Header>
    );
};

const MainTableBody = ({ activePageData, maxCellValues }) => {
    return (
        <Table.Body>
            {activePageData.map(row => (
                <Table.Row key={row.name}>
                    <Table.Cell
                        className={
                            row.returned_after > 0 ? "just-returned" : ""
                        }
                    >
                        {row.name}
                    </Table.Cell>
                    <Table.Cell>{row.level}</Table.Cell>
                    <Table.Cell>{row.clan_position}</Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="orange"
                            value={row.bricks_cnt}
                            total={maxCellValues.bricks_cnt}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="green"
                            value={row.wood_cnt}
                            total={maxCellValues.wood_cnt}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="yellow"
                            value={row.savings}
                            total={maxCellValues.savings}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="red"
                            value={row.arena_won}
                            total={maxCellValues.arena_won}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            value={row.arena_lost}
                            total={maxCellValues.arena_lost}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="blue"
                            value={row.ark_m}
                            total={maxCellValues.ark_m}
                        />
                    </Table.Cell>
                    <Table.Cell>
                        <Progress
                            progress="value"
                            color="pink"
                            value={row.ark_f}
                            total={maxCellValues.ark_f}
                        />
                    </Table.Cell>
                </Table.Row>
            ))}
        </Table.Body>
    );
};
