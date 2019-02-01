import React, { PureComponent, Fragment } from "react";
import { Table, Container, Pagination } from "semantic-ui-react";
import axios from "axios";
import _ from "lodash";

export class ProgressTable extends PureComponent {
    state = {
        column: null,
        data: [],
        currentData: [],
        direction: null,
        totalPages: 0,
        activePage: 1,
        perPage: 20
    };

    componentDidMount() {
        const { perPage } = this.state;
        axios
            .get("get-progress")
            .then(data => {
                this.setState({
                    data: data.data,
                    totalPages: Math.ceil(data.data.length / perPage)
                });
            })
            .then(() => {
                this.sliceData();
            });
    }

    handlePageChange = (event, data) => {
        this.setState({ activePage: data.activePage });
        this.sliceData();
    };

    sliceData = () => {
        const { activePage, perPage, data } = this.state;

        this.setState({
            currentData: data
                .slice((activePage - 1) * perPage)
                .slice(0, perPage)
        });
    };

    handleSort = clickedColumn => () => {
        const { column, data, direction } = this.state;

        if (column !== clickedColumn) {
            this.setState({
                column: clickedColumn,
                data: _.sortBy(data, [clickedColumn]),
                direction: "ascending"
            });

            return;
        }

        this.setState({
            data: data.reverse(),
            direction: direction === "ascending" ? "descending" : "ascending"
        });
    };

    render() {
        const {
            column,
            data,
            direction,
            totalPages,
            activePage,
            currentData
        } = this.state;
        const headers = [
            { name: "name", title: "Бог" },
            { name: "level", title: "Уровень" },
            { name: "bricks_cnt", title: "Кирпичи" },
            { name: "wood_cnt", title: "Бревна" },
            { name: "savings", title: "Сбережения" },
            { name: "arena_won", title: "Побед" },
            { name: "arena_lost", title: "Поражений" },
            { name: "ark_m", title: "Самцов" },
            { name: "ark_f", title: "Самок" }
        ];
        console.log(data);
        return (
            <Container>
                <Table sortable celled fixed>
                    <Table.Header>
                        <Table.Row>
                            {headers.map(header => (
                                <Table.HeaderCell
                                    key={header.name}
                                    sorted={
                                        column === header.name
                                            ? direction
                                            : null
                                    }
                                    onClick={this.handleSort(header.name)}
                                >
                                    {header.title}
                                </Table.HeaderCell>
                            ))}
                        </Table.Row>
                    </Table.Header>
                    <Table.Body>
                        {currentData.map(row => (
                            <Table.Row key={row.name}>
                                <Table.Cell>{row.name}</Table.Cell>
                                <Table.Cell>{row.level}</Table.Cell>
                                <Table.Cell>{row.bricks_cnt}</Table.Cell>
                                <Table.Cell>{row.wood_cnt}</Table.Cell>
                                <Table.Cell>{row.savings}</Table.Cell>
                                <Table.Cell>{row.arena_won}</Table.Cell>
                                <Table.Cell>{row.arena_lost}</Table.Cell>
                                <Table.Cell>{row.ark_m}</Table.Cell>
                                <Table.Cell>{row.ark_f}</Table.Cell>
                            </Table.Row>
                        ))}
                    </Table.Body>
                </Table>
                <Pagination
                    onPageChange={this.handlePageChange}
                    totalPages={totalPages}
                    activePage={activePage}
                />
            </Container>
        );
    }
}
