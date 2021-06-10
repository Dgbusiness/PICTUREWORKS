import React, { useContext } from 'react'
import { TaskContext } from '../contexts/TaskContextProvider'


export default function Navbar() {
    const { tasks } = useContext(TaskContext);

    return (
        <div className="navbar">
            <h1>Giannotti Daniel - Todo List</h1>
            <p>Currently you have { tasks.length } task to geth through... </p>
        </div>
    )
}
