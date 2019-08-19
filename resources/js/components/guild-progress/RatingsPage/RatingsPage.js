import React, { PureComponent } from "react";
import { Segment, Container, Progress } from "semantic-ui-react";
import "./style.css";
import _ from "lodash";

export default class RatingsPage extends PureComponent {
    render() {
        const {
            ark_sum,
            bricks_cnt,
            savings,
            wood_cnt,
            users_count,
            data_count
        } = this.props.data;

        return (
            <Container>
                <p>
                    Число записей: <b>{data_count}</b>.
                </p>
                <p>
                    Число богов в гильдии: <b>{users_count}</b>.
                </p>
                <hr />

                <div className="rating-container">
                    <Rating
                        title="Бревна"
                        color="green"
                        name="wood_cnt"
                        data={wood_cnt}
                        max_value={wood_cnt[0]["wood_cnt"]}
                    />
                    <Rating
                        title="Кирпичи"
                        color="orange"
                        name="bricks_cnt"
                        data={bricks_cnt}
                        max_value={bricks_cnt[0]["bricks_cnt"]}
                    />
                </div>
                <div className="rating-container">
                    <Rating
                        title="Сбережения"
                        color="yellow"
                        name="savings"
                        data={savings}
                        max_value={savings[0]["savings"]}
                    />

                    <Rating
                        title="Твари по паре (м+ж)"
                        color="blue"
                        name="ark_sum"
                        data={ark_sum}
                        max_value={ark_sum[0]["ark_sum"]}
                    />
                </div>
            </Container>
        );
    }
}

const Rating = ({ color, name, data, max_value, title }) => {
    return (
        <Segment className="rating-container__item">
            <h3>{title}</h3>
            {data.map(item => (
                <Progress
                    color={color}
                    progress="value"
                    value={item[name]}
                    total={max_value}
                >
                    {item["name"]}
                </Progress>
            ))}
        </Segment>
    );
};
